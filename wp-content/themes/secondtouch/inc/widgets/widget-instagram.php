<?php

/*
 * Widget random work
 */


class Crum_Instagram_Widget extends WP_Widget {



    public function __construct() {

        parent::__construct(

            'instagram_widget', // Base ID

            'Widget: Instagram recent', // Name

            array( 'description' => __( 'Recent instagram items + autor info', 'crum' ), ) // Args

        );

    }



    public function form( $instance ) {

        if ( isset( $instance[ 'title' ] ) ) {

            $title = $instance[ 'title' ];

        } else {

            $title = __( 'Instagram', 'crum' );

        }

?>

    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'crum' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
     </p>


        <?php

    }



    public function update( $new_instance, $old_instance ) {

        $instance = array();

        $instance['title'] = strip_tags( $new_instance['title'] );

        return $instance;

    }



    public function widget( $args, $instance ) {

        extract( $args );

            $title = apply_filters( 'widget_title', $instance['title'] );

        ?>



    <?php echo $before_widget;

        if ($title) {

            echo $before_title;
            echo $title;
            echo $after_title;

        }
        ?>
        
        <div class="intagram-gallery">
            <span class="big-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/pic/insta-big.jpg" alt=""/></span>
            <span class="normal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/pic/insta-mini1.jpg" alt=""/></span>
            <span class="normal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/pic/insta-mini2.jpg" alt=""/></span>
            <span class="normal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/pic/insta-mini3.jpg" alt=""/></span>
            <span class="normal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/pic/insta-mini4.jpg" alt=""/></span>
        </div>
        <div class="instagram-autor">

            <div class="instagram-stat">
                <span class="inst-photos">
                    <span class="numb">260</span>
                    <div class="diopinfo">photos</div>
                </span>
                <span class="inst-follower">
                    <span class="numb">260</span>
                    <div class="diopinfo">followers</div>
                </span>
                <span class="inst-follow">
                    <span class="numb">580</span>
                    <div class="diopinfo">follows</div>
                </span>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/pic/insta-autor.jpg" alt=""/>

            <div class="box-name">Jillian Andersen</div>
            <div class="diopinfo">Interface Designer</div>



        </div>





    <?php

        echo $after_widget;

    }



}

