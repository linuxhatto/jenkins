stage 'Checkout'
 node('master') {
  git push: 'Jenkins', credentialsId: 'e728f7c3-5b28-4125-ad82-75c8bd233f29', url: 'git@github.com:linuxhatto/jenkins.git'
  checkout scm
 }

stage 'Build'
 node('master') {
  sh "echo Build"
 }

