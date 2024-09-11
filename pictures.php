<?php
header('Content-Type: application/json');

$pictures = array(
    array(
        'title' => 'La Mona Lisa',
        'autor' => 'Leonardo da Vinci',
        'imagen' => 'https://art.thewalters.org/images/art/PS4_37.1158_PF_DD_AT23_44414-tms.jpg'
    ),
    array(
        'title' => 'La Noche Estrellada',
        'autor' => 'Vincent van Gogh',
        'imagen' => 'https://media.admagazine.com/photos/618a7dbc58ac69e38abb6c2c/16:9/w_1280,c_limit/43884.jpg'
    ),
    array(
        'title' => 'El Grito',
        'autor' => 'Edvard Munch',
        'imagen' => 'https://angeladearte.wordpress.com/wp-content/uploads/2016/08/120503_exp_scream-ex-crop-rectangle3-large.jpg?w=568&h=312&crop=1'
    ),
    array(
        'title' => 'La Persistencia de la Memoria',
        'autor' => 'Salvador Dalí',
        'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWT60jAdh5aqW-YMHDQWImLyNnF7KoEjzGpw&s'
    ),
    array(
        'title' => 'La Última Cena',
        'autor' => 'Leonardo da Vinci',
        'imagen' => 'https://lh3.googleusercontent.com/proxy/ymPUkfEM4AB3_n-IBLdSafBTcE_gZdvc1GCnimxCaLNEYjWFyHI4tAY1YczqYPFjkms61EsNYLY1zyIHmRZFzjfifvWwHK3jjaxnng2RW2Qc5AaSJDBIguDbVDfvv81EuEbXfNkIQw'
    )
);

echo json_encode($pictures);

?>