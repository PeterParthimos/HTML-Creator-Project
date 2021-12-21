<?php
namespace App\controllers;

class ClientController extends \App\core\Controller{
    function register() {

        if (isset($_POST['action'])) {
                $username = $_POST['upload'];
                $url = "http://localhost/DocumentConverter/app/api/client/post";
                $ch = curl_init( $url );
                # Setup request to send json via POST.
                $payload = json_encode( array( "username" => $username));
                curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json' , 'accept:application/json'));
                # Return response instead of printing.
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt( $ch, CURLOPT_HEADER, 0);
                # Send request.
                $username = curl_exec($ch);
                curl_close($ch);
                header('location:'.BASE);
        } else {
            // If the user hasn't pressed the "convert" button (if the action hasn't been done)
            // show the Video/upload view
            $this->view('Document/registration');
        }
            
    }
}

