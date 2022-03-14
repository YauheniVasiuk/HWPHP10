<?php

    Class Product 
    {

        public static function getApiLatetstProducts() {

            $curl = curl_init();

            $options = [
                CURLOPT_URL => "https://fakestoreapi.com/products",
                CURLOPT_RETURNTRANSFER => true,
            ];

            curl_setopt_array($curl, $options);

            $result = curl_exec($curl);

            $error = curl_errno($curl);

            if($error) {
                echo 'ERROR: (' . $error . ') ' . curl_error($curl);
            } else {

                return json_decode($result, true);

            }

        }

    } 