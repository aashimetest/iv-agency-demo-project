@if(session('message'))
    <div class="message message-success">
        <strong class="text-capitalize">{{session('message')}}</strong>
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif