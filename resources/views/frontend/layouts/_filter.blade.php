@if(isset($Category_lists))
<ul class="nav nav-tabs" id="myTab" role="tablist">
    @foreach($Category_lists as $Category)
    {{-- {{$Category}} --}}
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hello" role="tab">{{$Category->title}}</a></li>
    @endforeach
</ul>
@endif