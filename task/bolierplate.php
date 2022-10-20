<?php
# membuat variable
$nama = "Muhammad Rifanul Haq Ihsani";
$nim = "0110221335";
$jurusan = "Teknik Informatika 15";

# membuat class Animal
class Animal
{
    # property animals

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data, $animal)
    {   
        $animal->index = ('anjing');
        $animal->store = ('burung');
        $animal->update = ('kucing anggora');
        $animal->delete = (1);
    }

    # method index - menampilkan data animals
    public function index($animal)
    {   $animal->index = ('anjing');
        # gunakan foreach untuk menampilkan data animals (array)
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data, $animal)
    {   
        $animal->store = ('burung');
        $animal->index = ('anjing');
        # gunakan method array_push untuk menambahkan data baru
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data, $animal)
    {   
        $animal->update = ('kucing anggora');
        $animal->index = ('anjing');
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index, $animal)
    {   
        $animal->destoy = ();
        # gunakan method unset atau array_splice untuk menghapus data array
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal ([]);

echo $nama;
echo '<br>';
echo $nim;
echo '<br>';
echo $jurusan;
echo '<br>';

echo 'Index - Menampilkan seluruh hewan <br>';
$animal->index('anjing');
echo '<br>';

echo 'Store - Menambahkan hewan baru <br>';
$animal->store('burung');
$animal->index('anjing');
echo '<br>';

echo 'Update - Mengupdate hewan <br>';
$animal->update(0, 'kucing anggora');
$animal->index('anjing');
echo '<br>';

echo 'Destroy - Menghapus hewan <br>';
$animal->destroy(1);
$animal->index('anjing');
echo '<br>';