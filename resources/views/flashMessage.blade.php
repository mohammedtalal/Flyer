
	 <!-- this conditions to show a message to user when do something like add new flyer what ever ...  -->
    @if (session('success'))
      <div class="alert alert-success">
          <center><h3>{{ session('success') }}</h3></center>
      </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-danger">
            {{ session('warning') }}
        </div>
    @endif
    @if (session('info'))
        <div class="alert alert-danger">
            {{ session('info') }}
        </div>
    @endif
