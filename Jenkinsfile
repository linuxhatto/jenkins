stage 'Checkout'
 node('master') {
  sh "echo Checkout"
  checkout scm
 }

stage 'Build' {
    withCredentials([usernamePassword(credentialsId: 'e728f7c3-5b28-4125-ad82-75c8bd233f29', usernameVariable: 'GIT_ASKPASS', passwordVariable: 'GIT_PASSWORD')]) {
  sh "cd /tmp/jenkins; git push"
    }
 }
