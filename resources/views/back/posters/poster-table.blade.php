<table class="table table-striped">
    @php
    @endphp
    <thead>
        <tr>
            <th>#</th>
            <th>عنوان آگهی</th>
            {{-- <th>وضعیت</th> --}}
            <th>وضعیت انتشار</th>
            <th>نویسنده</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posters as $poster)
        <tr>
            <td>{{$poster->id}}</td>
            <td>{{ $poster->title }}</td>
            {{-- <td>
                @if ($poster->is_active)
                <span class="active" data-value="{{ $poster->id }}">
                    <i id="active{{ $poster->id }}" class="fa fa-check btn btn-success"></i>
                </span>
                @else
                <span class="active" data-value="{{ $poster->id }}">
                    <i id="active{{ $poster->id }}" class="fa fa-times btn btn-warning" aria-hidden="true">
                    </i></span>
                @endif
            </td> --}}
            <td>
                @if ($poster->status=='esperar')
               <span id="activeposter{{ $poster->id }}">
                منتظر تایید
                <a  class="btn btn-success has-ripple p-0 px-1" id="active_poster" data-value="{{ $poster->id }}"
                    >انتشار</a>
               </span>
                @elseif ($poster->status=='active')
                فعال
                @elseif ($poster->status=='deactive')
                منتشر نشده
                @elseif ($poster->status=='close')
                بسته شده
                @else
                پیش نویس
                @endif
            </td>

            <td>
                @if ($poster->user)
                {{ $poster->user->name }}
                @endif
             </td>
            <td><a type="button" href="" class="btn btn-danger has-ripple " style="padding:0 3px">حذف</a>
                <a type="button" href="{{route('admin.posters.edit',$poster->slug)}}" class="btn btn-success has-ripple"
                    style="padding:0 3px">ویرایش</a>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>