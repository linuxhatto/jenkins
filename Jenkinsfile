stage 'Checkout'
 node('master') {
  sh "echo Checkout"
  checkout scm
 }

stage 'Build'
 node('master') {
  def tag = new Date().format("yyyyMMddHHmm")
  sh "echo Build ${tag}"
 }

