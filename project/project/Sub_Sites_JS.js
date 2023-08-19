function display_ct() 
            {
                var time = new Date()
                document.getElementById('DT').innerHTML = time;
                mytime=setTimeout('display_ct()',refresh=1000)
            }

