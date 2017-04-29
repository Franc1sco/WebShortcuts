<html> 
    <head> 
        <title>CSGO Webshortcuts</title> 
    </head> 
    <body> 
        <script type="text/javascript" > 
            var str = "<?php echo htmlspecialchars($_GET["web"]); ?>"; 
            var full = "<?php echo htmlspecialchars($_GET["fullsize"]); ?>"; 
            var height = "<?php echo htmlspecialchars($_GET["height"]); ?>";  
            var width = "<?php echo htmlspecialchars($_GET["width"]); ?>";  
             
            if (full == 1) { 
                window.open(str, "_blank", "toolbar=yes, fullscreen=yes, scrollbars=yes, width=" + screen.width + ", height=" + (screen.height - 72)); 
            } 
            else { 
                //Set the default width and height for if it's not defined 
                if (height === undefined || height === null || height == "") 
                { 
                    height = 720; 
                } 
                if (width === undefined || width === null || width == "") 
                { 
                    width = 960; 
                } 
                window.open(str, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, fullscreen=no, width=" + width + ", height=" + height); 
            } 
        </script> 
    </body> 
</html>