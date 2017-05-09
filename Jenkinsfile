stage 'Checkout'
 node('master') {
  sh "echo Checkout"
  checkout scm
 }

stage 'Build'
 node('master') {
  
  withCredentials([usernamePassword(credentialsId: 'e728f7c3-5b28-4125-ad82-75c8bd233f29', usernameVariable: 'GIT_USERNAME', passwordVariable: 'GIT_PASSWORD')]) {
  def tag = new Date().format("yyyyMMddHHmm")
  sh "cd /tmp/jenkins"
  sh("git tag -a ${tag} -m '${USER} tagging'")
  sh "git push origin https://${GIT_USERNAME}:${GIT_PASSWORD}@github.com/linuxhatto/jenkins.git"
    }
 }
