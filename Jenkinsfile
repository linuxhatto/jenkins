stage 'Checkout'
 node('master') {
  deleteDir()
  checkout scm
 }

stage 'Build'
 node('master') {
  sh 'cd /var/www/html/dnsconsult'
  sh 'git tag -a some_tag -m 'Jenkins''
  sh 'it push https://${GIT_USERNAME}:${GIT_PASSWORD}@<REPO> --tags'
 checkout scm
 }

