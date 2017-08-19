<?php

/**
 * This is the model class for table "emprestimo_solicitacao".
 *
 * The followings are the available columns in table 'emprestimo_solicitacao':
 * @property integer $reqEmprestimoId
 * @property string $email
 * @property string $fone
 * @property string $data
 * @property string $valor
 * @property integer $qtdPercelas
 * @property string $taxa
 * @property string $status
 */
class EmprestimoSolicitacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'emprestimo_solicitacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, valor, qtdPercelas, taxa', 'required'),
			array('qtdPercelas', 'numerical', 'integerOnly'=>true,  'min'=>1, 'max'=>250),
			array('email', 'length', 'max'=>100),
			array('fone', 'length', 'max'=>14),
			array('valor', 'length', 'max'=>20),
			array('taxa', 'length', 'max'=>5),
			array('status', 'length', 'max'=>10),
                    
			array('data', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('reqEmprestimoId, email, fone, data, valor, qtdPercelas, taxa, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reqEmprestimoId' => 'Req Emprestimo',
			'email' => 'Email',
			'fone' => 'Fone',
			'data' => 'Data',
			'valor' => 'Valor',
			'qtdPercelas' => 'Qtd Percelas',
			'taxa' => 'Taxa',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('reqEmprestimoId',$this->reqEmprestimoId);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fone',$this->fone,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('valor',$this->valor,true);
		$criteria->compare('qtdPercelas',$this->qtdPercelas);
		$criteria->compare('taxa',$this->taxa,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmprestimoSolicitacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
//        public function validate($attributes = null, $clearErrors = true) {
//            $return = parent::validate($attributes, $clearErrors);
//            if($this->qtdPercelas > 36)
//            {
//                 $this->addError('qtdParcelas', 'qtd parcelas nao pode ser maior que 36');
//            };
//            return !$this->hasErrors();
//        }
}
