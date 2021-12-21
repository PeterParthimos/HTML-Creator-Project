<?php
    namespace App\controllers;

    class ConversionController extends \App\core\Controller {

        function convert() {
            if (session_status() != 2) {
                session_start();
            }

            if (isset($_POST['action'])) {
                if (isset($_FILES['file'])) {
                    if (isset($_POST['clientID'])) {

                        $extensionExploded = explode(".", $_FILES['file']['name']);
                        $extensionFinal = end($extensionExploded);

                        if ($extensionFinal == "doc" || $extensionFinal == "docx") {

                            $clientID = $_POST['clientID'];
                            $file = $_FILES['file']['tmp_name'];
                            $url = "http://localhost/DocumentConverter/app/api/document/post";
                            $ch = curl_init( $url );
                            # Setup request to send json via POST.
                            $payload = json_encode( array( "client_id"=> $clientID, "filename"=> $file) );
                            curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
                            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json' , 'accept:application/json'));
                            # Return response instead of printing.
                            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                            curl_setopt( $ch, CURLOPT_HEADER, 0);
                            # Send request.
                            $file = curl_exec($ch);
                            curl_close($ch);
                            echo '<!DOCTYPE html>

                            <head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                            
                                <title>Registration</title>
                            
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                            
                                <style>
                                    h1 {
                                        font-size: 350%;
                                    }
                            
                                    h2 {
                                        font-size: 150%;
                                    }
                                </style>
                            </head>
                            
                            <body class="bg-light">
                                <div class="container-fluid p-5 bg-secondary text-white text-center">
                                    <h1>Conversion Complete</h1>
                                    <h2 class="text-center">Here is your link!</h2>
                                </div>
                                <div style="max-width:800px; margin:auto;">
                                    <p>'.$file.'</p>
                                </div>
                            
                            </body>
                            
                            </html>';

                            $date = date('Y-m-d H:i:s');

                            $ip = $_SERVER['REMOTE_ADDR'];

                            $stats = new \App\Models\Statistics();
                            $stats->date = $date;
                            $stats->address = $ip;
                            $stats->insert();

                        }
                    }
                }
                
            } else {
                // If the user hasn't pressed the "convert" button (if the action hasn't been done)
                // show the Video/upload view
                $this->view('Document/conversion');
            }
        }

        
    }

?>