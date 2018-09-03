@if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul class="alert-list">
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif