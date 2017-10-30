<?php
 



    class Settings
    {      
     
        public function Settings()
        {
            $this->PublicKey="";//"Public Magaza Anahtarı - size mağaza başvurunuz sonucunda gönderilen publik key (açık anahtar) bilgisini kullanınız.",
            $this->PrivateKey="";//"Private Magaza Anahtarı  - size mağaza başvurunuz sonucunda gönderilen privaye key (gizli anahtar) bilgisini kullanınız.",
            $this->BaseUrl="https://api.ipara.com/"; //iPara web servisleri API url'lerinin başlangıç bilgisidir. Restful web servis isteklerini takip eden kodlar halinde bulacaksınız.
                                                         // Örneğin "https://api.ipara.com/" + "/rest/payment/auth"  = "https://api.ipara.com/rest/payment/auth" 

            $this->Version="1.0";// Kullandığınız iPara API versiyonudur. 
            $this->Mode="T"; // Test -> T, entegrasyon testlerinin sırasında "T" modunu, canlı sisteme entegre olarak ödeme almaya başlamak için ise Prod -> "P" modunu kullanınız.            
            $this->HashString="";// Kullanacağınız hash bilgisini, bağlanmak istediğiniz web servis bilgisine göre doldurulmalıdır. Bu bilgileri Entegrasyon rehberinin ilgili web servise ait bölümde bulabilirsiniz.
            
            

        }

        public $PublicKey;
        public $PrivateKey;
        public $BaseUrl;
        public $Mode;
        public $Version;
        public $HashString;
        public $transactionDate;


     
    }
