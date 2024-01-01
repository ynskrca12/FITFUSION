@extends('layouts.master')

@section('content')

@if(Session::has('error'))
     <p class="alert alert-info">{{ Session::get('error') }}</p>
@endif

<div class="container">

    <form action="{{ route('add_post_my_workouts') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Antreman Oluştur</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" name="workouts_name" class="form-control" id="workoutsName" placeholder="Antreman Adı">
                    <label for="workoutsName">Antreman Adı</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="workouts_description" class="form-control" id="workoutsDescription" placeholder="Antreman Açıklaması">
                    <label for="workoutsDescription">Antreman Açıklaması</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="workouts_duration" class="form-control" id="workoutsDuration" placeholder="Antreman Süresi">
                    <label for="workoutsDuration">Antreman Süresi</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="workouts_intensity" class="form-control" id="workoutsIntensity" placeholder="Antreman Şiddeti/Seviyesi">
                    <label for="workoutsIntensity">Antreman Şiddeti/Seviyesi</label>
                </div>

            </div>

            <div class="col-md-6">
                <h3>Antreman Ekle</h3>

                <p>
                    Antreman eklemenin birkaç faydalı nedeni vardır. Antremanlar, sağlıklı bir yaşam tarzı sürdürmenin, fiziksel formu korumanın ve genel iyi hissetmenin önemli bir parçasıdır. Düzenli antreman yapmanın bazı faydaları şunlardır:
                </p>

                <ul>
                    <li>Fiziksel sağlığı iyileştirme ve koruma</li>
                    <li>Zihinsel sağlığı destekleme ve stresle başa çıkma</li>
                    <li>Enerji seviyelerini artırma</li>
                    <li>Kalp sağlığını geliştirme</li>
                    <li>Kas kütlesini artırma veya kilo kontrolü</li>
                </ul>

                <p>
                    Bu form aracılığıyla, düzenli bir antreman programına başlayabilir ve sağlığınızı iyileştirmeye adım atabilirsiniz. Antreman eklerken aşağıdaki alanları doldurun ve hedeflerinize ulaşmak için başlangıç yapın!
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="btnSubmit" class="btn btn-info">Antreman Ekle</button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('css')
    <style>
body {
    background-color: #f8f9fa;
}

.container {
    margin-top: 50px;
    padding: 30px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    transition: box-shadow 0.3s ease;
}
.container:hover {
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.2); /* Hover sırasında gölgeyi artırdık */
}

h3 {
    color: #495057;
    margin-bottom: 20px;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 15px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #007bff; /* Odaklandığında border rengini değiştirdik */
}


.btn {
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    transition: background-color 0.3s ease;
}
.btn:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* İsteğe Bağlı: Form alanlarını yan yana yerleştirmek için */
.form-floating {
    width: 100%;
    margin-bottom: 15px;
}

/* İsteğe Bağlı: Form alanlarının genişliğini artırmak için */
.form-floating input {
    width: calc(100% - 24px);
}

/* İsteğe Bağlı: Form alanlarına odaklandığında border rengini değiştirmek için */
.form-control:focus {
    border-color: #007bff;
}

/* İsteğe Bağlı: Gönder butonuna hover ettiğimizde renk değiştirmek için */
.btn:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

    </style>
@endsection

@section('js')
    <!-- İsteğe Bağlı: Sayfa özel JavaScript kodları buraya eklenebilir -->
@endsection
