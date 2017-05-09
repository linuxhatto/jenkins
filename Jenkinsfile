stage 'Checkout'
 node('master') {
  sh "echo Checkout"
  checkout scm
 }

stage 'Build'
 node('master') {

  sh "cd /tmp/jenkins; git push"

 }
