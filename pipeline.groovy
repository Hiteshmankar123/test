pipeline {
    agent any
    stages {
        stage('Pull') {
            echo "Hello world"
                        }
        stages {               
            stage('Build') {
                echo 'Build successful'
            }
        }
    }
}