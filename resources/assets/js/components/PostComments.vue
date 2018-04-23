<template>
  <div> 
<p style="color:green">{{pluralizeComment(comments.length) }}</p>

<div class="video-comment clearfix" v-if="signedIn" >
<textarea  rows="3" placeholder="Izox qoldiring" class="form-control video-comment__input" v-model="body">
 
</textarea>
 
  <div class="pull-right mt-1"  >
                    <button class="btn btn-info " style="padding:9px 12px"  @click.prevent="createComment">jonatish
                        <i class="fa fa-send ml-1"></i>
                    </button>
     </div>
</div> 
<ul class="media-list" style="padding-left:0;  ">
    
    <li class="media" v-for="comment in comments">
         
        <div class="media-body">
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
   <div class="media-body">
              <h5 class="mt-0" style="color:black">{{comment.user.name}}</h5>
              
 <span v-text="ago(comment.created_at.date)"></span>
<p class="mb-2">{{comment.body}}</p>
  
  <ul class="list-inline" >
    <li v-if="signedIn"  >
      <a class=" mr-2" href="#" style="color:#33b5e5" @click.prevent="toggleReplyForm(comment.id)">{{replyFormVisible === comment.id ? 'Bekor qilish' : 'Javob Yozish'}}</a>
    
      <a href="#" style="color:red"  v-if="user.id === comment.user.id || user.is_admin===1" @click.prevent="deleteComment(comment.id)">Ochirish</a>
    </li>
  </ul>
<div v-if="signedIn">
 <div class="video-comment" v-if="replyFormVisible === comment.id" >
   <textarea class="form-control mt-3 mb-1" v-model="replyBody"></textarea>
   <div   > 
     <button class="btn btn-info btn-sm" style="padding:9px 12px"  @click.prevent="createReply(comment.id)">jonatish
                        <i class="fa fa-send ml-1"></i>
                    </button>
      </div>
 </div>
 </div>
      <div class="media mt-4" v-for="reply in comment.replies.data">
                   <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
   
                <div class="media-body">
                  <h5 class="mb-2"> {{reply.user.name}}</h5>
               {{reply.body}}
         <ul class="list-inline"  >
                
                <li> 
                    <li v-if="signedIn"  >
               <p><a href="#" style="color:red" v-if="user.id === reply.user.id|| user.is_admin===1"  @click.prevent="deleteComment(reply.id)">Ochirish</a></p> 
               <li v-if="signedIn"  >
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
    createReply(commentId) {
      axios
        .post("/kategoriyalar/" + this.postSlug + "/izoxlar", {
          body: this.replyBody,
          reply_id: commentId
        })
        .then(
          response => {
            this.comments.map((comment, index) => {
              if (comment.id === commentId) {
                this.comments[index].replies.data.unshift(response.data.data);
              }
            });
            this.replyBody = null;
            this.replyFormVisible = null;

            flash("Sizning izoxingiz jonatildi!");
          },
          () => {
            flash("Nimadur notogri", "danger");
          }
        );
    },
    createComment() {
      axios
        .post("/kategoriyalar/" + this.postSlug + "/izoxlar", {
          body: this.body
        })
        .then(
          response => {
            this.comments.unshift(response.data.data);
            this.body = null;
            flash("Sizning izoxingiz jonatildi!");
          },
          () => {
            flash("Nimadur notogri", "danger");
          }
        );
    },
    deleteComment(id) {
      if (!confirm("Siz izoxni oxhirishni chindan istaysizmi?")) {
        return;
      }
      this.deleteById(id);
      axios
        .delete("/kategoriyalar/" + this.postSlug + "/izoxlar/" + id)
        .then(() => {
          flash("Izox Ochirildi!");
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
