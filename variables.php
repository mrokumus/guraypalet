<?php

#İLETİŞİM
$phoneNumber = get_field('telefon_numarasi', "option");
$whatsappNumber = get_field('whatsapp_numarasi', "option");
$whatsappMessage =  str_replace(' ', '+', get_field('whatsapp_mesaji', "option"));

#URL
$favIcon =   get_field('fav_icon', "option");
$logoUrl =   get_field('logo', "option");
$whatsappUrl = "https://api.whatsapp.com/send/?phone=".$whatsappNumber."&text=".$whatsappMessage."&app_absent=0";

