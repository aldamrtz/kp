<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaptchaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function generateCaptcha() {
        // Set header untuk gambar
        header("Content-type: image/png");

        // Membuat gambar
        $width = 120;
        $height = 40;
        $image = imagecreatetruecolor($width, $height);
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $text_color = imagecolorallocate($image, 0, 0, 0);
        $line_color = imagecolorallocate($image, 64, 64, 64);
        $dot_color = imagecolorallocate($image, 150, 150, 150);

        imagefilledrectangle($image, 0, 0, $width, $height, $background_color);

        // Menambahkan garis acak
        for($i = 0; $i < 5; $i++) {
            imageline($image, rand()%$width, rand()%$height, rand()%$width, rand()%$height, $line_color);
        }

        // Menambahkan bintik-bintik acak
        for($i = 0; $i < 100; $i++) {
            imagesetpixel($image, rand()%$width, rand()%$height, $dot_color);
        }

        // Menambahkan teks captcha
        $captcha_text = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
        $this->session->set_userdata('captcha', $captcha_text);
        imagestring($image, 5, 10, 10, $captcha_text, $text_color);

        // Output gambar
        imagepng($image);
        imagedestroy($image);
    }
}
?>
