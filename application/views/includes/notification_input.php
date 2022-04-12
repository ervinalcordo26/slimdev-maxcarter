<div style="display:none;">
<input id="title" type="text" placeholder="Enter a title ..." value="Success"/>
<?php if(isset($notif_type)){echo $notif_type;}?>
<textarea id="message" rows="3" placeholder="Enter a message ...">This is a testing notification</textarea>
<input id="closeButton" type="checkbox" value="checked" checked/>
<input id="addBehaviorOnToastClick" type="checkbox" value="checked"/>
<input id="progressBar" type="checkbox" value="checked" checked/>
<input id="rtl" type="checkbox" value="checked"/>
    <div id="toastTypeGroup">
        <input type="radio" name="toasts" value="success" id="idnotiftype1"/>
        <input type="radio" name="toasts" value="info" id="idnotiftype2"/>
        <input type="radio" name="toasts" value="warning" id="idnotiftype3"/>
        <input type="radio" name="toasts" value="error" id="idnotiftype4"/>
    </div>
<div id="positionGroup">
    <input type="radio" name="positions" value="toast-top-right" checked/>
</div>
<input id="showEasing" type="hidden" value="swing"/>
<input id="hideEasing" type="hidden" value="linear"/>
<input id="showMethod" type="hidden" value="fadeIn"/>
<input id="hideMethod" type="hidden" value="fadeOut"/>
<input id="showDuration" type="hidden" value="300"/>
<input id="hideDuration" type="hidden" value="1000"/>
<input id="timeOut" type="hidden" value="5000"/>
<input id="extendedTimeOut" type="hidden" value="1000"/>
<button type="button" class="btn btn-success" id="showtoast">Show Toast</button>

</div>