# Rehber projesi
# DB Tanımları

### Birimler
- id
- birim_adi
- konumu

### Unvanlar
- id
- unvan_adi

## İş listesi
- Önce adminer ile rehber adlı veri tabanı oluşturulur 
- .env dosyasına veri tabanı bilgileri girilir.
- Model , migratin ve controller hazırla.
- Örnek Prompt:"Bu tablolar içincontroller hazırla."
Model Bindin kullan.Rest Api projesi olacak try gibi hata kontolleri Olmasın.
Crud işlemlerini yerine getirebilsin.
- api.php dosyasına route tanımları yapılır.
- bootstrap.php dosyasına api satırı eklenecek.
- Rest Client için api-test.http dosyası oluşturulur.
- https://marketplace.windsurf.com/extension/humao/rest-client sayfasında bilgilere göre projenin api-test.http dosyası oluşturulur.
 php artisan route:list

  GET|HEAD        / ...............................................................................................................
  GET|HEAD        api/birimler ............................................................. birimler.index › BirimController@index
  POST            api/birimler ............................................................. birimler.store › BirimController@store
  GET|HEAD        api/birimler/{birim} ....................................................... birimler.show › BirimController@show
  PUT|PATCH       api/birimler/{birim} ................................................... birimler.update › BirimController@update
  DELETE          api/birimler/{birim} ................................................. birimler.destroy › BirimController@destroy
  GET|HEAD        api/unvanlar ............................................................. unvanlar.index › UnvanController@index
  POST            api/unvanlar ............................................................. unvanlar.store › UnvanController@store
  GET|HEAD        api/unvanlar/{unvan} ....................................................... unvanlar.show › UnvanController@show
  PUT|PATCH       api/unvanlar/{unvan} ................................................... unvanlar.update › UnvanController@update
  DELETE          api/unvanlar/{unvan} ................................................. unvanlar.destroy › UnvanController@destroy
  GET|HEAD        storage/{path} .................................................................................... storage.local
  GET|HEAD        up ..............................................................................................................

Şimdi, php artisan route:list yeniden kontrol edilir.

 php artisan migrate

   INFO  Preparing database.

  Creating migration table ........................................................................................... 28.80ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ............................................................................... 76.73ms DONE
  0001_01_01_000001_create_cache_table ............................................................................... 24.88ms DONE
  0001_01_01_000002_create_jobs_table ................................................................................ 79.32ms DONE
  2025_08_28_120000_create_birimler_table ............................................................................ 11.44ms DONE
  2025_08_28_120001_create_unvanlar_table ............................................................................ 11.02ms DONE

- Laravel Projesi oluşturuldu.Servisi başlatmak için php artisan serve komutu çalıştırılır.
