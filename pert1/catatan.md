pertemua ke 1
pengenalan docker dan kegunaan dan set up wsl,navicat, dan install visual code 

langkah2nya 
1. bikin docker-compose.myl
2. bikin env
3. bikin nginx
Pertemua ini belajar Html
volume buat temapat menyimpan filenya
location itu tempat di mana file di simpan

COMPOSE_PROJECT_NAME=esgul? = untuk nama proyek docker
REPOSITORY_NAME=pemweb  = nama reposi proyek
IMAGE_TAG=latest

ports:
- "80:80" = Menghubungkan port 80 di container dengan port 80 di host agar bisa diakses dari browser

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            This is a div element
            <p>This is a paragraph inside the div</p>
        </div>
    </body>
</html>

head untuk kepala/ bagian di atas comtoh nya nama website dan url
title bagian nama website kalo di sini contohnya Document
body untuk badan atau bagian yg muncul kalo di sini paragraf
div untuk mengelompokkan dan mengatur elemen lain dalam  halaman web
teg a untuk menaruh link untuk tampil di web
teg p untuk paragraf
teg img untuk masukan gambar ke dalam web
