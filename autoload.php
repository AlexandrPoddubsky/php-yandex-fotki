<?php
/**
 * Generated by "Autoload generator"
 * @link http://github.com/dmkuznetsov/php-autoloader
 * @date 2013-11-16 21:22
 */
function __dm_autoload_fotki( $name )
{
	$map = array (
  'Yandex\\Fotki\\Api' => 'source/Yandex/Fotki/Api.php',
  'Yandex\\Fotki\\ApiAbstract' => 'source/Yandex/Fotki/ApiAbstract.php',
  'Yandex\\Fotki\\Api\\Album' => 'source/Yandex/Fotki/Api/Album.php',
  'Yandex\\Fotki\\Api\\AlbumsCollection' => 'source/Yandex/Fotki/Api/AlbumsCollection.php',
  'Yandex\\Fotki\\Api\\CollectionAbstract' => 'source/Yandex/Fotki/Api/CollectionAbstract.php',
  'Yandex\\Fotki\\Api\\FimpAuth' => 'source/Yandex/Fotki/Api/FimpAuth.php',
  'Yandex\\Fotki\\Api\\Photo' => 'source/Yandex/Fotki/Api/Photo.php',
  'Yandex\\Fotki\\Api\\PhotosCollection' => 'source/Yandex/Fotki/Api/PhotosCollection.php',
  'Yandex\\Fotki\\Api\\ServiceDocument' => 'source/Yandex/Fotki/Api/ServiceDocument.php',
  'Yandex\\Fotki\\Api\\Tag' => 'source/Yandex/Fotki/Api/Tag.php',
  'Yandex\\Fotki\\Api\\TagsCollection' => 'source/Yandex/Fotki/Api/TagsCollection.php',
  'Yandex\\Fotki\\Encrypt' => 'source/Yandex/Fotki/Encrypt.php',
  'Yandex\\Fotki\\Exception' => 'source/Yandex/Fotki/Exception.php',
  'Yandex\\Fotki\\Exception\\Api' => 'source/Yandex/Fotki/Exception/Api.php',
  'Yandex\\Fotki\\Exception\\Api\\Album' => 'source/Yandex/Fotki/Exception/Api/Album.php',
  'Yandex\\Fotki\\Exception\\Api\\AlbumsCollection' => 'source/Yandex/Fotki/Exception/Api/AlbumsCollection.php',
  'Yandex\\Fotki\\Exception\\Api\\Auth' => 'source/Yandex/Fotki/Exception/Api/Auth.php',
  'Yandex\\Fotki\\Exception\\Api\\Photo' => 'source/Yandex/Fotki/Exception/Api/Photo.php',
  'Yandex\\Fotki\\Exception\\Api\\PhotosCollection' => 'source/Yandex/Fotki/Exception/Api/PhotosCollection.php',
  'Yandex\\Fotki\\Exception\\Api\\ServiceDocument' => 'source/Yandex/Fotki/Exception/Api/ServiceDocument.php',
  'Yandex\\Fotki\\Exception\\Api\\StopIteration' => 'source/Yandex/Fotki/Exception/Api/StopIteration.php',
  'Yandex\\Fotki\\Exception\\Api\\Tag' => 'source/Yandex/Fotki/Exception/Api/Tag.php',
  'Yandex\\Fotki\\Exception\\Api\\TagsCollection' => 'source/Yandex/Fotki/Exception/Api/TagsCollection.php',
  'Yandex\\Fotki\\Exception\\CurlError' => 'source/Yandex/Fotki/Exception/CurlError.php',
  'Yandex\\Fotki\\Exception\\ServerError' => 'source/Yandex/Fotki/Exception/ServerError.php',
  'Yandex\\Fotki\\Transport' => 'source/Yandex/Fotki/Transport.php',
);
	if ( isset( $map[ $name ] ) )
	{
		require $map[ $name ];
	}
}
spl_autoload_register( '__dm_autoload_fotki' );
