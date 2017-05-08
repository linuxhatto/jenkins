stage 'Checkout'
 node('master') {
  deleteDir()
  checkout scm
 }

stage 'Build'
 node('master') {
  archiveArtifacts '/tmp'
  sh 'touch build'
 checkout scm
 }

