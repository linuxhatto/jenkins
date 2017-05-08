stage 'Checkout'
 node('master') {
  deleteDir()
  checkout scm
 }

stage 'Build'
 node('master') {
  sh "git push origin master"
 }

