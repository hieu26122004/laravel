@extends("layout.layout") @section("content")
<div class="row">
    @include("layout.sidebar")
    <div class="col-6">
        <!-- toast -->
        @include("shared.toast")
        <!-- create form -->
        @include("shared.create_idea")
        <hr />
        <!-- render idea -->
        <div class="mt-3">
            @foreach ($ideas as $idea) @include("shared.card_idea") @endforeach
            {{ $ideas->links() }}
        </div>
    </div>
    <!-- aside -->
    <aside class="col-3">
        <!-- search form -->
        @include("shared.search")
        <!-- follow box -->
        @include("shared.follow_box")
    </aside>
</div>
@endsection
