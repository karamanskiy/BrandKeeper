<?php

/*
 * создаем новое подключение к API Instagram, о том, как получить $token, написано выше;
 */
$token = '4220215980.d4358d1.cc6f4a9cd5ba47f2a5d976ac14967f8d';
/*
 * Тут указываем либо ID пользователя, либо "self" для вывода фото владельца токена
 * Как получить ID? Да в том же инструменте, в котором вы получали токен
 */
$user_id = 'd4358d1482b34ba987ec9bd5de62323c';
$instagram_cnct = curl_init(); // инициализация cURL подключения
curl_setopt( $instagram_cnct, CURLOPT_URL, "https://api.instagram.com/v1/users/" . $user_id . "/media/recent?access_token=" . $token ); // подключаемся
curl_setopt( $instagram_cnct, CURLOPT_RETURNTRANSFER, 1 ); // просим вернуть результат
curl_setopt( $instagram_cnct, CURLOPT_TIMEOUT, 15 );
$media = json_decode( curl_exec( $instagram_cnct ) ); // получаем и декодируем данные из JSON
curl_close( $instagram_cnct ); // закрываем соединение
 
/*
 * количество фотографий для вывода
 */
$limit = 4;
/*
 * размер изображений (высота и ширина одинаковые)
 */
$size = 200;
/*
 * функция array_slice() задает количество элементов, которые нам нужно получить из массива
 * если нам нужно вывести все фото, тогда: foreach($media->data as $data) {
 */
foreach(array_slice($media->data, 0, $limit) as $data) {
	echo '<a href="' . $data->link . '" target="_blank">';
	echo '<img src="'. $data->images->low_resolution->url . '" height="'.$size.'" width="'.$size.'"/>';
	echo '</a>';
}

?>