<?php
if (is_uploaded_file ( $_FILES ['image'] ['tmp_name'] )) {
    if (! file_exists ( 'upload' )) {
        mkdir ( 'upload' );
    }
    $image = 'upload/' . basename ( $_FILES ['image'] ['name'] );
    if (move_uploaded_file ( $_FILES ['image'] ['tmp_name'], $image )) {
        echo $image, 'のアップロードに成功しました。';
        echo '<p><img src="', $image, '"></p>';
    } else {
        echo 'アップロードに失敗しました。';
    }
} else {
    echo 'ファイルを選択してください。';
}
?>
<p>
    <a href="/baby">一覧へ戻る</a>
</p>
<?php
var_dump($_FILES['image']['tmp_name']);
?>