const webSocket= new WebSocket("ws://127.0.0.1:3000")
    var video=document.querySelector(".video_container");

    webSocket.onmessage=(event)=>{
        handleSignallingData(JSON.parse(event.data))
    }

    function handleSignallingData(data){
        switch(data.type){
            case"offer":
            peercon.setRemoteDescription(data.offer)
            createAndSendAnswer()
            break
            case "candidate":
                peercon.addIceCandidate(data.candidate)
        }
    }
    function createAndSendAnswer(){
        peercon.createAnswer((answer)=>{
            sendData({
                type:"send_answer",
                answer:answer
            })
        },
        error=>{
            console.log(error)
        })
    }

    function sendData(data){
        data.username=username
        webSocket.send(JSON.stringify(data))
    }

    let localStream
    let peercon
    let username
    function joinCall(){
    
        username=document.querySelector("#username_input").value

        video.style.display="flex"

        navigator.getUserMedia({
            video:{
                frameRate:24,
                width:{
                min:480,ideal:720,max:1200
                },
                aspectRatio:1.33333
            },
            audio:true   
        },(stream)=>{
            localStream= stream
            document.querySelector("#local_video").srcObject= localStream

            let configuration={
                iceServers:[
                    {
                        "urls":["stun1.l.google.com:19302",
                        "stun2.l.google.com:19302",
                        "stun3.l.google.com:19302",]
                    }
                ]
            }

            peercon=new RTCPeerConnection(configuration)
            peercon.addStream(localStream)

            peercon.onaddstream=(e)=>{
                document.querySelector("#remote_video").srcObject= e.stream
            }
            peercon.onicecandidate=(e)=>{
                if(e.candidate==null)
                    return
                
                    sendData({
                        type:"send_candidate",
                        candidate:e.candidate
                    })
            }

            sendData({
                type:"join_call"
            })

        },(error)=>{
            console.log(error)
        })
    }

    let isAudio= true
    function mutemic(){
        isAudio= !isAudio
        localStream.getAudioTracks()[0].enabled= isAudio
    }

    let isVideo=true
    function mutevideo(){
        isVideo= !isVideo
        localStream.getVideoTracks()[0].enabled= isVideo
    }