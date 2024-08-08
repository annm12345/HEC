const webSocket= new WebSocket("ws://127.0.0.1:3000")
    var video=document.querySelector(".video_container");

    webSocket.onmessage=(event)=>{
        handleSignallingData(JSON.parse(event.data))
    }

    function handleSignallingData(data){
        switch(data.type){
            case"answer":
            peercon.setRemoteDescription(data.answer)
            break
            case "candidate":
                peercon.addIceCandidate(data.candidate)
        }
    }

    let username
    function sendUsername(){
        username=document.querySelector("#username_input").value
        sendData({
            type:"store_user",
        })
    }
    function sendData(data){
        data.username=username
        webSocket.send(JSON.stringify(data))
    }
    let localStream
    let peercon
    function stratCall(){
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
                        type:"store_candidate",
                        candidate:e.candidate
                    })
            }

            createAndSendOffer()
        },(error)=>{
            console.log(error)
        })
    }
    function createAndSendOffer(){
        peercon.createOffer((offer) => {
            sendData({
                type:"store_offer",
                offer:offer
            })
        
        peercon.setLoaclDescription(offer)
        },(error)=>{
            console.log(error)
        }
        )
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