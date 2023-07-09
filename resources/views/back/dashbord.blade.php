@push('chart-add')
<script src="{{url('/back/assets/js/plugins/apexcharts.min.js')}}"></script>
@endpush
@extends('back.index')
@section('content')
@include('layout.messages')

<div class="col-xl-12">
  <div class="card">
    @if (auth('employer')->user()->role==1)
    <div class="card-header">
      <h5>صفحه ی داشبورد</h5>
      <a href="{{route('export_excel.excel')}}">خروجی اکسل</a>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="d-flex align-items-center pb-2">
                <div class="dot-indicator bg-danger mr-2"></div>
                <p class="mb-0">تعداد کل یوزر ها</p>
              </div>
              <h4 class="font-weight-semibold">{{$users}}</h4>
              <div class="progress progress-md">
                <div class="progress-bar bg-danger" role="progressbar" style="width: {{$users}}%" aria-valuenow="78"
                  aria-valuemin="0" aria-valuemax="78"></div>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0 pt-5">
              <div class="d-flex align-items-center pb-2">
                <div class="dot-indicator bg-success mr-2"></div>
                <p class="mb-0">ثبت نام دیروز</p>
              </div>
              <h4 class="font-weight-semibold">{{$yesterday}}</h4>
              <div class="progress progress-md">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{$yesterday}}%"
                  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0 pt-5">
              <div class="d-flex align-items-center pb-2">
                <div class="dot-indicator bg-success mr-2"></div>
                <p class="mb-0">ثبت نام امروز</p>
              </div>
              <h4 class="font-weight-semibold">{{$tomorrow}}</h4>
              <div class="progress progress-md">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{$tomorrow}}%" aria-valuenow="45"
                  aria-valuemin="0" aria-valuemax="45"></div>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0 pt-5">
              <div class="d-flex align-items-center pb-2">
                <div class="dot-indicator bg-success mr-2"></div>
                <p class="mb-0">ثبت نام 24 ساعت گذشته</p>
              </div>
              <h4 class="font-weight-semibold">{{$today}}</h4>
              <div class="progress progress-md">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{$today}}%" aria-valuenow="45"
                  aria-valuemin="0" aria-valuemax="45"></div>
              </div>
            </div>
            {{-- <div class="col-md-6 mt-4 mt-md-0 pt-5">
              <div><span>جنسیت:</span><span>{{$gender}}</span>
              </div>
              <div><span>عنوان شغلی:</span><span>{{$jobe_title}}</span></div>
              <div><span>ایمیل:</span><span>{{$email}}</span></div>
              <div><span>آدرس:</span><span>{{$adress}}</span></div>
              <div><span>تولد:</span><span>{{$birthday}}</span></div>
              <div><span>استان:</span><span>{{$state}}</span></div>

            </div> --}}

          </div>

        </div>
      </div>
    </div>
    @endif

    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <h5>آمار ثبت اطلاعات اولیه</h5>
        </div>
        <div class="col-md-12 mt-4 mt-md-0">
          <div class="pt-3">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">جنسیت:</p>
            </div>
            <h4 class="font-weight-semibold">{{$gender}}({{round($gender*100/$users)}}%)</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{$gender*100/$users}}%"
                aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
          <div class="pt-3">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">عنوان شغلی:</p>
            </div>
            <h4 class="font-weight-semibold">{{$jobe_title}}({{round($jobe_title*100/$users)}}%)</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{$jobe_title*100/$users}}%"
                aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
          <div class="pt-3">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">ایمیل:</p>
            </div>
            <h4 class="font-weight-semibold">{{$email}}({{round($email*100/$users)}}%)</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{$email*100/$users}}%"
                aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
          <div class="pt-3">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">آدرس:</p>
            </div>
            <h4 class="font-weight-semibold">{{$adress}}( {{round($adress*100/$users)}}%)</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{$adress*100/$users}}%"
                aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
          <div class="pt-3">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">تولد:</p>
            </div>
            <h4 class="font-weight-semibold">{{$birthday}}({{round($birthday*100/$users)}}%)</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{$birthday*100/$users}}%"
                aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
          <div class="pt-3">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">استان:</p>
            </div>
            <h4 class="font-weight-semibold">{{$state}}({{round($state*100/$users)}}%)</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{$state*100/$users}}%"
                aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>جدول اطلاعات کارجویان</h5>
                </div>
                <div class="card-body">
                  <div id="mixed-chart-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
<script>
  function interDataSumPrice() { 
    return  [{
  name: 'Website Blog',
  type: 'column',
  data: [{{$users}}, {{$lang}}, {{$about}}, /*{{$desc}},*/ {{$workexperienc}}, {{$workexperienc}}, {{$skill}},{{$research}},{{$eduCours}},{{$research}},{{$presenter}}]
}, {
  name: 'Social Media',
  type: 'line',
  
}]
}
function interDataNumber(){
return  [
'تعداد کل ثبت نامی'
,'حداقل ثبت یک زبان '
,'درباره ی من دارند'
// , 'اطلاعات اولیه دارند'
,'سابقه تحصیلی'
,'سابقه کار'
,'عمومی مهارت'
,'عمومی تخصصی'
,'سابقه ی آموزشی'
,'سابقه ی پژوهشی'
,'معرف'
]
}
</script>