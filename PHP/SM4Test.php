<?php
/**
 *
 * User: wuwf
 * Date: 2020/8/7
 * Time: 15:25
 * Description:
 */
require __DIR__.DIRECTORY_SEPARATOR.'SM4Util.php';
$sm4 = new SM4Util();
$original_plain_text_data = '你行得';

$key = '1234567890abcdef';

$origin_encrypted_text = '93bc151dc9b013c0994f3727db3b6725';
$encrypted_text_data = $sm4->setKey($key)->encryptData($original_plain_text_data);
$encrypted_text_2_plain_text = $sm4->setKey($key)->decryptData($encrypted_text_data);
$original_decrypted_text = $sm4->setKey($key)->decryptData($origin_encrypted_text);

echo sprintf("加密key：%s\n原始字符串：%s\n加密后字符串：%s\n加密后字符串解密串：%s\n原始加密后字符串：%s\n原始加密后字符串解密字符串：%s",
        $key,
        $original_plain_text_data,
        $encrypted_text_data,
        $encrypted_text_2_plain_text,
        $origin_encrypted_text,
        $original_decrypted_text
    ) . PHP_EOL;
exit;
