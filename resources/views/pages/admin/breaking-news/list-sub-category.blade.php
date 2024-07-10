@php
 $dash.='-- ';   
@endphp 
@foreach($subcategories as $subcategory)
    <tr>
        <td></td>
        <td>{{$dash}}{{$subcategory->name}}</td>
        <td>{{$subcategory->slug}}</td>
        <td>
            <a class="btn btn-primary btn-xs" href="{{ route('breaking-news-list', $subcategory->id) }}">
                <i class="fas fa-eye"></i> &nbsp; Lihat
            </a>
        </td>
    </tr>
    @if(count($subcategory->subcategory))
        @include('pages.admin.category.list-sub-category',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach