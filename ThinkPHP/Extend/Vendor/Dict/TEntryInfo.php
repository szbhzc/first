<?php
namespace Dict;

/**
 * Autogenerated by Thrift Compiler (0.9.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Exception\TApplicationException;


class TEntryInfo {
  static $_TSPEC;

  public $dictid = null;
  public $command = null;
  public $entryline = null;
  public $entrytype = null;
  public $idxtype = null;
  public $value = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'dictid',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'command',
          'type' => TType::I16,
          ),
        3 => array(
          'var' => 'entryline',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'entrytype',
          'type' => TType::I32,
          ),
        5 => array(
          'var' => 'idxtype',
          'type' => TType::I32,
          ),
        6 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['dictid'])) {
        $this->dictid = $vals['dictid'];
      }
      if (isset($vals['command'])) {
        $this->command = $vals['command'];
      }
      if (isset($vals['entryline'])) {
        $this->entryline = $vals['entryline'];
      }
      if (isset($vals['entrytype'])) {
        $this->entrytype = $vals['entrytype'];
      }
      if (isset($vals['idxtype'])) {
        $this->idxtype = $vals['idxtype'];
      }
      if (isset($vals['value'])) {
        $this->value = $vals['value'];
      }
    }
  }

  public function getName() {
    return 'TEntryInfo';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->dictid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->command);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->entryline);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->entrytype);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->idxtype);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->value);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('TEntryInfo');
    if ($this->dictid !== null) {
      $xfer += $output->writeFieldBegin('dictid', TType::I32, 1);
      $xfer += $output->writeI32($this->dictid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->command !== null) {
      $xfer += $output->writeFieldBegin('command', TType::I16, 2);
      $xfer += $output->writeI16($this->command);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->entryline !== null) {
      $xfer += $output->writeFieldBegin('entryline', TType::I32, 3);
      $xfer += $output->writeI32($this->entryline);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->entrytype !== null) {
      $xfer += $output->writeFieldBegin('entrytype', TType::I32, 4);
      $xfer += $output->writeI32($this->entrytype);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->idxtype !== null) {
      $xfer += $output->writeFieldBegin('idxtype', TType::I32, 5);
      $xfer += $output->writeI32($this->idxtype);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->value !== null) {
      $xfer += $output->writeFieldBegin('value', TType::STRING, 6);
      $xfer += $output->writeString($this->value);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TLineInfo {
  static $_TSPEC;

  public $dispAttr = null;
  public $LBIndent = null;
  public $LDIndent = null;
  public $LCIndent = null;
  public $tag = null;
  public $prefix = null;
  public $suffix = null;
  public $fill = null;
  public $value = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'dispAttr',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'LBIndent',
          'type' => TType::I16,
          ),
        3 => array(
          'var' => 'LDIndent',
          'type' => TType::I16,
          ),
        4 => array(
          'var' => 'LCIndent',
          'type' => TType::I16,
          ),
        5 => array(
          'var' => 'tag',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'prefix',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'suffix',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'fill',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['dispAttr'])) {
        $this->dispAttr = $vals['dispAttr'];
      }
      if (isset($vals['LBIndent'])) {
        $this->LBIndent = $vals['LBIndent'];
      }
      if (isset($vals['LDIndent'])) {
        $this->LDIndent = $vals['LDIndent'];
      }
      if (isset($vals['LCIndent'])) {
        $this->LCIndent = $vals['LCIndent'];
      }
      if (isset($vals['tag'])) {
        $this->tag = $vals['tag'];
      }
      if (isset($vals['prefix'])) {
        $this->prefix = $vals['prefix'];
      }
      if (isset($vals['suffix'])) {
        $this->suffix = $vals['suffix'];
      }
      if (isset($vals['fill'])) {
        $this->fill = $vals['fill'];
      }
      if (isset($vals['value'])) {
        $this->value = $vals['value'];
      }
    }
  }

  public function getName() {
    return 'TLineInfo';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->dispAttr);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->LBIndent);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->LDIndent);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->LCIndent);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tag);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->prefix);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->suffix);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->fill);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->value);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('TLineInfo');
    if ($this->dispAttr !== null) {
      $xfer += $output->writeFieldBegin('dispAttr', TType::I32, 1);
      $xfer += $output->writeI32($this->dispAttr);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->LBIndent !== null) {
      $xfer += $output->writeFieldBegin('LBIndent', TType::I16, 2);
      $xfer += $output->writeI16($this->LBIndent);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->LDIndent !== null) {
      $xfer += $output->writeFieldBegin('LDIndent', TType::I16, 3);
      $xfer += $output->writeI16($this->LDIndent);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->LCIndent !== null) {
      $xfer += $output->writeFieldBegin('LCIndent', TType::I16, 4);
      $xfer += $output->writeI16($this->LCIndent);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tag !== null) {
      $xfer += $output->writeFieldBegin('tag', TType::STRING, 5);
      $xfer += $output->writeString($this->tag);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->prefix !== null) {
      $xfer += $output->writeFieldBegin('prefix', TType::STRING, 6);
      $xfer += $output->writeString($this->prefix);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->suffix !== null) {
      $xfer += $output->writeFieldBegin('suffix', TType::STRING, 7);
      $xfer += $output->writeString($this->suffix);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fill !== null) {
      $xfer += $output->writeFieldBegin('fill', TType::STRING, 8);
      $xfer += $output->writeString($this->fill);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->value !== null) {
      $xfer += $output->writeFieldBegin('value', TType::STRING, 9);
      $xfer += $output->writeString($this->value);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


