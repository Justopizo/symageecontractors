<?php
class PHPMailer {
    public $Host;
    public $Port;
    public $SMTPAuth = true;
    public $Username;
    public $Password;
    public $SMTPSecure;
    public $From;
    public $FromName;
    public $Subject;
    public $Body;
    public $AltBody;
    public $IsHTML = true;
    private $to = [];
    private $attachments = [];

    public function isSMTP() {
        return true;
    }

    public function addAddress($email, $name = '') {
        $this->to[] = ['email' => $email, 'name' => $name];
    }

    public function addAttachment($path, $name = '') {
        $this->attachments[] = ['path' => $path, 'name' => $name];
    }

    public function send() {
        $headers = [];
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        $headers[] = 'From: ' . $this->FromName . ' <' . $this->From . '>';
        
        $boundary = md5(time());
        
        if (!empty($this->attachments)) {
            $headers[] = 'Content-Type: multipart/mixed; boundary="' . $boundary . '"';
            
            $message = '--' . $boundary . "\r\n";
            $message .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
            $message .= 'Content-Transfer-Encoding: 7bit' . "\r\n\r\n";
            $message .= $this->Body . "\r\n";
            
            foreach ($this->attachments as $attachment) {
                if (file_exists($attachment['path'])) {
                    $message .= '--' . $boundary . "\r\n";
                    $message .= 'Content-Type: application/octet-stream; name="' . basename($attachment['path']) . '"' . "\r\n";
                    $message .= 'Content-Transfer-Encoding: base64' . "\r\n";
                    $message .= 'Content-Disposition: attachment' . "\r\n\r\n";
                    $message .= chunk_split(base64_encode(file_get_contents($attachment['path']))) . "\r\n";
                }
            }
            $message .= '--' . $boundary . '--';
        } else {
            $message = $this->Body;
        }

        foreach ($this->to as $recipient) {
            if (!mail($recipient['email'], $this->Subject, $message, implode("\r\n", $headers))) {
                return false;
            }
        }
        return true;
    }
}
?>
