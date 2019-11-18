<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctype;
use App\SubjectArea;
use App\Subject;
use App\Time;
use App\Order;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use Google_Service_Drive_Permission;
use App\User;
use Hash;



class OrderController extends Controller
{

    public function __construct(){
        $path = resource_path('Pro-writenod-test-12c337747e75.json');
        putenv('GOOGLE_APPLICATION_CREDENTIALS='. $path);;
    }

    public function Order(){
        $doctypes = Doctype::get();
        $orderNo=  "WPR".time();

        return view ('order', ['doctypes' => $doctypes], ['orderNo'=>$orderNo]);
    }
    public function generateOrderNo(){
        $orderNo=  "WPR".time();
        return $orderNo;
    }


    public function getSubjectArea(Request $request){
        $id = $request->post('doctype');
       $doctype = Doctype::find($id);

       $subjectarea_ids = unserialize($doctype->subject_area);

      $subjectareas = SubjectArea::find($subjectarea_ids);

        $subject_ids = unserialize($doctype->doc_subject);

        $subject = Subject::find($subject_ids);

        $time_ids= unserialize($doctype->urgency);

        $time=Time::find($time_ids);

        $education_ids= unserialize($doctype->education);


        return response()->json([
            "status" => "ok",
            "subjectareas" => $subjectareas,
            "subject" => $subject,
            "time"=>$time,
            "education"=>$education_ids,
            //"doctype" => $id
        ]);
    }


    public function stepOne(Request $request){
        $step = $request->get('step');
        $order_num = $request->get('orderNo');

        if($step == 1){
            $order = Order::where('order_no', $order_num);

//            If order exists, update

//            If not, create a new one
            $validatedOrder = $this->validate($request, [
                'orderNo'=>'required',
                'doc_name' => 'required',
                'subject_area' => 'required',
                'subject' => 'required',
                'education' => 'required',
                'delivery' => 'required',
                'length' => 'required'
                ]);


            $order = new Order;
            $order->doc_name = $validatedOrder['doc_name'];
            $order->subject_area = $validatedOrder['subject_area'];
            $order->subject = $validatedOrder['subject'];
            $order->education = $validatedOrder['education'];
            $order->order_no=$validatedOrder['orderNo'];
            $order->delivery = $validatedOrder['delivery'];
            $order->length= $validatedOrder['length'];

            $order->save();


            return response()->json([
                'status' => 'ok',
                 'step' => 2
            ]);
        }elseif($step == 2){
           // $step = $request->get('step');
            $order_num = $request->get('orderNo');
            $order = Order::where('order_no', $order_num)->first();

            $validatedOrder = $this->validate($request, [
               'title'=>'required',
               'instructions'=>'required',
                 'focus'=>'required',
                 'structure'=>'required',
                'number'=>'required',
                'reference'=>'required',
                'suggested'=>'required',
                 'essential'=>'required'
            ]);

            $order->title=$validatedOrder['title'];
            $order->instructions=$validatedOrder['instructions'];
            $order->focus=$validatedOrder['focus'];
            $order->structure=$validatedOrder['structure'];
            $order->reference=$validatedOrder['reference'];
            $order->number=$validatedOrder['number'];
            $order->suggested=$validatedOrder['suggested'];
            $order->essential=$validatedOrder['essential'];

            $order->save();


            return response()->json([
               'status' => 'ok',
                'step' => 3
           ]);


        }elseif($step==3){

            return response()->json([
                'status'=>'ok',
                'step'=>4
            ]);

        } elseif($step == 4){
            $order_num = $request->get('orderNo');
            $order = Order::where('order_no', $order_num)->first();

            return response()->json([
                'status' => 'ok',
               'order'=>$order,
                'step' => 5
            ]);


        }


        }

        public function getPrice(Request $request){
            $id= $request->post('doctype');
            $doctype = Doctype::find($id);

            $base_price= (int)$doctype->base_price;


            $education_price=unserialize($doctype->education);
            $id=$request->post('edu');

            $price=0;

            foreach($education_price as $edu){
             //   print_r ($edu);
                if($edu["edu_name"] == $id){
                    $edu_price = $edu["edu_price"];
                    $edu_price_type = $edu["edu_pricein"];

                    if($edu_price_type == "%"){

                        $price = ($edu_price / 100) * $base_price;
                    }else{
                        $price = $edu_price;
                    }


                }
            }
            $deliveryPrice=unserialize($doctype->urgency);
            $id=$request->post('time');

            $delPrice=Time::find($deliveryPrice);

            $urgency_time=0;
            foreach($delPrice as $del){
                if($del["id"]==$id) {

                    $del_price = $del["urgency_price"];

                    $del_price_type = $del["urgency_price_in"];

                    if($del_price_type=="%"){

                        $urgency_time=($del_price/100)*$base_price;
                    }else{
                        $urgency_time=$del_price;
                    }
                }

            }
            $id=$request->post('len');

            if($id==1){
                $length=0;
            }else {
                $length = $base_price * $id;
            }
            $id=$request->post('spacing');
            if($id==1){
                $spacing=0;

            }else{
                $spacing=$base_price*2;
            }




            $totalCost=((int)$base_price)+ $price + $urgency_time +$length;





            return response ()->json([
                "status"=>"ok",
                "base_price"=>$base_price,
                "education"=>$price,
                "delivery_time"=>$urgency_time,
                "length"=> $length,
                "total_cost"=>$totalCost,
                "spacing"=>$spacing

            ]);



        }


//        public function getFolderId($folder){
//
//            if($folder == 'file') {
//                return '1ZeViIMuqgmRUu4f31FgxhpD2e4_PNfHx';
//            }
//        }
        public function uploadFile(){
//            print_r($_FILES['upl']); return;

            $client = new Google_Client();
            $client->useApplicationDefaultCredentials();
            $client->addScope(Google_Service_Drive::DRIVE);
//            $client->setSubject("grace.g@mambo.co.ke");

            $driveService = new Google_Service_Drive($client);

//            $folderId ='1ZeViIMuqgmRUu4f31FgxhpD2e4_PNfHx';

            // File's new content.
            $fileMetadata = new Google_Service_Drive_DriveFile(array(
                'name' => $_FILES['upl']['name'],
//                'parents' => array($folderId)
            ));
            echo $_FILES['upl']['tmp_name'];
            $data = file_get_contents($_FILES['upl']['tmp_name']);

            $response = [];

            try {
                $file = $driveService->files->create($fileMetadata, array(
                    'data' => $data,
                    'uploadType' => 'multipart',
                    'fields' => 'id, webViewLink, webContentLink'));

                $pemParams = new Google_Service_Drive_Permission();
                $pemParams->setRole("reader");
                $pemParams->setType("anyone");
                $pemParams->setAllowFileDiscovery(false);
                $permission = $driveService->permissions->create($file->id, $pemParams);

                $response['status'] = "success";
                $response['file'] = $file; //$file->webViewLink

                print_r($file);
            } catch (Exception $e) {
                $response['status'] = "error";
                $response['details'] = $e;

                echo $e;
            }

            return $response;

        }

        public function Payment(){

        }



}
