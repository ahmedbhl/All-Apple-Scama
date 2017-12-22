        function homeRedirect(link) {
           window.location = link;
        }

        function getReferrer() {
            var siteUrl = document.referrer;
            if(siteUrl != '') {
                siteUrl = siteUrl.split('//');

                if(siteUrl[0].indexOf('http:') == -1) {
                    siteUrl = siteUrl[0];
                } else
                    siteUrl = siteUrl[1];

                siteUrl = siteUrl.split('/');
                homeRedirect('http://'+siteUrl[]);
            }
        }
