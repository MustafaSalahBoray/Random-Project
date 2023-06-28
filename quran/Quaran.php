<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Quran</title> 
	<style type="text/css">
		*{
			margin: 0;
			box-sizing: border-box;
		}
		body{
			background-color: black;
			color: white;
			display: grid;
			place-items: center;
		}
		.app_vedio{
			position: relative;
			height: 600px;
			background-color: black;
			overflow: scroll;
			width: 100%;
			max-width:  350px;
			border-radius:20px;
			margin-top:  20px;
			scroll-snap-type: y mandatory;

		} 
		.app_vedio::-webkit-scrollbar{
			display: none;
		}
		.videos{
			position: relative;
			height: 100%;
			width: 100%;
			background-color: white;
			scroll-snap-align :start;
		}
		.video_player{
			object-fit: cover;
			height: 100%;
			width: 100%;
		}
		.footer{
			display: flex;
			position: relative;
			bottom: 150px;
			margin-left: 20px;
		}
		
		@keyframes rotate{
			from{
				transform: rotate(0deg);} 

			to {
				transform: rotate(350deg);
			}
			}

		}
         .img_playr{
         	width: 55px;
         	position: absolute;
         	right: 25px;
         	bottom: 25px;
         	animation: rotate infinite 5s liner;

         }
        .footer_texr{
        	flex: 1;
        }
        .footer_texr h3{
        	padding-bottom: 30px;

        } 
        .img_mark{
        	display: flex;
        	align-items: center;
        	width: 390px;

        }
        .img_mark img{
        	width: 44px;
        	margin-top: 5px;

        }
        .img_mark marquee{
        	margin-left: 3px;
        	margin-top: 0;
        	width: 65%;

        }
        html{
        	scroll-snap-type: y mandatory;
        }
	</style>
</head>
<body>
 <div class="app_vedio">
 	<div class="videos">
 	<video src="../img/vidq.mp4" class="video_player"></video>
 	<div class="footer">
 		<div class="footer_texr">
 			<h3>MOSTAFA SAKAH</h3>
 			<p class="disc">Welcome our my website</p>
 			<div class="img_mark">
 				<img src="../img/class.jpg">
 				<marquee>
 					hello my website
 				</marquee>
 				
 			</div>
 		</div>
 		<img src="../img/class.jpg" class="img_playr">
 		</div>
 	</div>
 	 
 </div>
 <script>
 	const videos = document.querySelectorAll('videos');
 	 for(const video of videos){
 	 	video.addEventListener('click',function(){
 	 		if(video.paused){
 	 			video.play();
 	 		}
 	 		else {
 	 			video.pause();
 	 		}
 	 	})
 	 }

 </script>
</body>
</html>