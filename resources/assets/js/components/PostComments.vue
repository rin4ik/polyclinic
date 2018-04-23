<template>
  <div> 
<p>{{pluralizeComment(comments.length) }}</p>

<div class="video-comment clearfix" v-if="signedIn" >
<textarea  rows="3" placeholder="Izox qoldiring" class="form-control video-comment__input" v-model="body">
 
</textarea>
<div class="pull-right">
  <button type="submit" class="mt-3 btn btn-outline-success btn-sm" @click.prevent="createComment">jonatish</button>
</div>
</div> 
<ul class="media-list" style="padding-left:0;  ">
    
    <li class="media" v-for="comment in comments">
         
        <div class="media-body">
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
   <div class="media-body">
              <h5 class="mt-0">{{comment.user.name}}</h5>
              
 <span v-text="ago(comment.created_at.date)"></span>
<p class="mb-2">{{comment.body}}</p>
  
  <ul class="list-inline" >
    <li v-if="signedIn"  >
      <a class=" mr-2" href="#" @click.prevent="toggleReplyForm(comment.id)">{{replyFormVisible === comment.id ? 'Bekor qilish' : 'Javob Yozish'}}</a>
    
      <a href="#" style="color:red"  v-if="user.id === comment.user.id" @click.prevent="deleteComment(comment.id)">Ochirish</a>
    </li>
  </ul>

 <div class="video-comment" v-if="replyFormVisible === comment.id" >
   <textarea class="form-control mt-3" v-model="replyBody"></textarea>
   <div class="pull-right" style="margin-bottom:10px;">
     <button class="btn btn-blue btn-sm " type="submit" @click.prevent="createReply(comment.id)">Reply</button>
      </div>
 </div>
 
      <div class="media mt-4" v-for="reply in comment.replies.data">
                   <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
   
                <div class="media-body">
                  <h5 class="mb-2"> {{reply.user.name}}</h5>
               {{reply.body}}
         <ul class="list-inline"  >
                
                <li> 
               <p><a href="#" style="color:red" v-if="user.id === reply.user.id"  @click.prevent="deleteComment(reply.id)">Ochirish</a></p> 
                </li>
        </ul>
                </div>
       </div>
  
 </div>
</div>
        </div> 
    
    </li>
</ul>
</div>
</template>
<script>
import moment from "moment";
export default {
  data() {
    return {
      comments: [],
      body: null,
      editing: false,
      replyBody: null,
      user: window.App.user,
      signedIn: window.App.signedIn,
      replyFormVisible: null
    };
  },
  props: {
    postSlug: null
  },
  methods: {
    getComments() {
      axios
        .get("/kategoriyalar/" + this.postSlug + "/izoxlar")
        .then(response => {
          this.comments = response.data.data;
        });
    },
    deleteComment(id) {
      if (!confirm("Are you sure you want to delete this comment?")) {
        return;
      }
      this.deleteById(id);
      axios
        .delete("/kategoriyalar/" + this.postSlug + "/izoxlar/" + id)
        .then(() => {
          flash("succesfully deleted");
        })
        .catch(error => {
          console.log(error.response.data.errors);
        });
    },
    deleteById(id) {
      this.comments.map((comment, index) => {
        if (comment.id === id) {
          this.comments.splice(index, 1);
          return;
        }
        comment.replies.data.map((reply, replyIndex) => {
          if (reply.id == id) {
            this.comments[index].replies.data.splice(replyIndex, 1);
            return;
          }
        });
      });
    },
    pluralizeComment(count) {
      if (count === 1) {
        return count + " Izox";
      } else {
        return count + " Izoxlar";
      }
    },
    ago(value) {
      return (
        moment(value)
          .subtract(120, "minutes")
          .from(moment()) + "..."
      );
    },
    toggleReplyForm(commentId) {
      this.replyBody = null;
      if (this.replyFormVisible === commentId) {
        this.replyFormVisible = null;
        return;
      }
      this.replyFormVisible = commentId;
    }
  },

  mounted() {
    this.getComments();
  }
};
</script>
