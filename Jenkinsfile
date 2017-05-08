stage 'Checkout'
 node('master') {
  deleteDir()
  checkout scm
 }

stage 'Build'
 node('master') {
  
  withCredentials([usernameColonPassword(credentialsId: 'mylogin', variable: 'USERPASS')]) {
    sh '''
      set +x
      cd /var/www/html/dnsconsult
      git tag -a some_tag -m "Jenkins"
      git push origin master
    }
 }

