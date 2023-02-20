@if(Session::has('success'))
    <div class="alert alert-success" id="success" style="
    z-index: 999;width: 30%;
    position: absolute;
    right: 0;">
        {{Session::get('success')}}
    </div>
    
    <script type="text/javascript">
        document.querySelector('#success').addEventListener('click', () => {
            document.querySelector('#success').style.display = 'none';
        }); 
            </script>
@endif

@if(Session::has('fail'))
    <div class="alert alert-danger" id="fail" style="
z-index: 999;width: 30%;
position: absolute;
right: 0;">
       {{Session::get('fail')}}
    </div>
    
    <script type="text/javascript">
        document.querySelector('#fail').addEventListener('click', () => {
            document.querySelector('#fail').style.display = 'none';
        }); 
            </script>
@endif

@if ($errors->any())
<div id="alert" class="alert alert-danger" style="
z-index: 999;width: 30%;
position: absolute;
right: 0;">
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    
    <script type="text/javascript">
        document.querySelector('#alert').addEventListener('click', () => {
            document.querySelector('#alert').style.display = 'none';
        }); 
            </script>

    @endif



