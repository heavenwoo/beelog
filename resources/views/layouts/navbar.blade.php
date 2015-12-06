<div class="container-fluid">
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="{!! url('/') !!}">BEELOG</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-01">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#fakelink">Products</a></li>
            <li><a href="#fakelink">Features</a></li>
        </ul>
        {!! Form::open(['class' => 'navbar-form navbar-right', 'url' => url('post/search'), 'role' => 'search']) !!}
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
                </div>
            </div>
        {!! Form::close() !!}
    </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->
</div>