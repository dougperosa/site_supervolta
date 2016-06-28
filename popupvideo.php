<div id="videopopup" style="text-align: center; position: fixed; top: 0; bottom: 0; left: 0; right: 0; margin: auto; width: 100%; height: 100%; padding: 20px; background: rgba(0,0,0,0.7); display: block;"> 
    <table>
        <tr>
        <button class="btn btn-danger" style="margin-top: 95px; margin-left: 700px" onclick="document.getElementById('videopopup').style.display = 'none';
                                document.getElementById('video1').pause();"><b>X</b></button>
        </tr>
    </table>
    <table>
        <tr>
        <video id="video1" src="./videos/Vídeo Super Volta Unimed MTB.mp4" controls autoplay style="margin-top: 5px">
            <source src="./videos/Vídeo Super Volta Unimed MTB.mp4">
        </video>
        </tr>
    </table>
</div>