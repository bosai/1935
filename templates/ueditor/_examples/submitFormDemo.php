<script type="text/javascript" charset="utf-8" src="../ace/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../ace/ueditor/_examples/editor_api.js"></script>  
   <form id="form" method="post" target="_blank">
        <script type="text/plain" id="myEditor" name="myEditor">
            <p>欢迎使用UEditor！</p>
        </script>
        <input type="submit" value="通过input的submit提交">
    </form>
    <script type="text/javascript">
        var editor_a = UE.getEditor('myEditor',{initialFrameHeight:500});
    </script>

