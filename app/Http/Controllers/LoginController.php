<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class LoginController extends Controller
{

    public function generateOTP()
    {
        $otp = mt_rand(111111, 999999);
        return $otp;
    }

    public function login(Request $request)
    {

        $credentials = $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where(["email" => $credentials["email"]])->first();

        if (isset($user)) {
            if (Hash::check($credentials["password"], $user->password)) {
                //put in session
                $otp = $this->generateOTP();
                $message = 'The otp for the Pro.writenod.com is ' . $otp;
                session(['otp' => $otp]);


                $resp = $this->otpEmail($message, $user->email);

                return response()->json([
                    "status" => "ok",
                    "msg" => $resp,
                    "hello" => $otp
                ]);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => "Incorrect username or password"
                ]);
            }

        } else {
            return response()->json([
                "status" => "error"
            ]);
        }



    }
    public function otpEmail($message, $email){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.mailgun.org';
            $mail->SMTPAuth = true;
            $mail->Username = 'postmaster@sandboxda786e86170e4e66b2410b7c33b996a2.mailgun.org';
            $mail->Password = '3ef77a9e574ebf68a89c3211a240cb5f-985b58f4-e8f038de';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('hello@example.com', 'Mailer');
            $mail->addAddress($email, 'User');


            $mail->isHTML(true);
            $mail->Subject = 'Otp message';
            $mail->Body = $message;

            $mail->send();

            return 'Message has been sent';
        }catch(Exception $e){
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function VerifyOtp(Request $request)
    {
        $data =$this->validate($request, [
            'otp' => 'required',
        ]);
        $enteredOtp = $data['otp'];
        $otp = $request->session()->get('otp');

        if ($otp == $enteredOtp){
            return response()->json([
                "status" => "ok",
                //"redirect"=>url('/success')
            ]);

        }else{
            return response()->json([
                "status" => "error",
                "errMsg" => "incorrect otp entered"
            ]);
        }

    }



}
